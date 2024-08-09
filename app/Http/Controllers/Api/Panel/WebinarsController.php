<?php

namespace App\Http\Controllers\Api\Panel;

use App\Http\Controllers\Api\Controller;
use App\Http\Resources\BundleResource;
use App\Http\Resources\WebinarResource;
use App\Mixins\Cashback\CashbackRules;
use App\Models\Api\Sale;
use App\Models\Api\Webinar;
use App\Models\Gift;
use App\Models\WebinarChapter;
use App\Models\WebinarPartnerTeacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WebinarsController extends Controller
{
    public function show($id)
    {
        $user = apiAuth();
        $user = apiAuth();

        $webinarsQuery = Webinar::where('status', 'active')
            ->where('private', true)->where('id', $id);

        abort_unless($webinarsQuery->count(), 404);

        $webinars = $webinarsQuery->orderBy('webinars.created_at', 'desc')
            ->orderBy('webinars.updated_at', 'desc')
            ->get()->map(function ($webinar) {
                return $webinar->details;
            })->first();

        $cashbackRules = null;
        if (!empty($webinars["price"]) and getFeaturesSettings('cashback_active') and (empty($user) or !$user->disable_cashback)) {
            $cashbackRulesMixin = new CashbackRules($user);
            $cashbackRules = $cashbackRulesMixin->getRules('courses', $webinars["id"], $webinars["type"], null, null);
        }
        $webinars["cashbackRules"] = $cashbackRules;

        return apiResponse2(1, 'retrieved', trans('api.public.retrieved'), $webinars);


        /*$webinar = Webinar::where('id', $id)
            ->with([
                'quizzes' => function ($query) {
                    $query->where('status', 'active')
                        ->with(['quizResults', 'quizQuestions']);
                },
                'tags',
                'prerequisites' => function ($query) {
                    $query->with(['prerequisiteWebinar' => function ($query) {
                        $query->with(['teacher' => function ($qu) {
                            $qu->select('id', 'full_name', 'avatar');
                        }]);
                    }]);
                    $query->orderBy('order', 'asc');
                },
                'faqs' => function ($query) {
                    $query->orderBy('order', 'asc');
                },
                'webinarExtraDescription' => function ($query) {
                    $query->orderBy('order', 'asc');
                },
                'chapters' => function ($query) use ($user) {
                    $query->where('status', WebinarChapter::$chapterActive);
                    $query->orderBy('order', 'asc');

                    $query->with([
                        'chapterItems' => function ($query) {
                            $query->orderBy('order', 'asc');
                        }
                    ]);
                },
                'files' => function ($query) use ($user) {
                    $query->join('webinar_chapters', 'webinar_chapters.id', '=', 'files.chapter_id')
                        ->select('files.*', DB::raw('webinar_chapters.order as chapterOrder'))
                        ->where('files.status', WebinarChapter::$chapterActive)
                        ->orderBy('chapterOrder', 'asc')
                        ->orderBy('files.order', 'asc')
                        ->with([
                            'learningStatus' => function ($query) use ($user) {
                                $query->where('user_id', !empty($user) ? $user->id : null);
                            }
                        ]);
                },
                'textLessons' => function ($query) use ($user) {
                    $query->where('status', WebinarChapter::$chapterActive)
                        ->withCount(['attachments'])
                        ->orderBy('order', 'asc')
                        ->with([
                            'learningStatus' => function ($query) use ($user) {
                                $query->where('user_id', !empty($user) ? $user->id : null);
                            }
                        ]);
                },
                'sessions' => function ($query) use ($user) {
                    $query->where('status', WebinarChapter::$chapterActive)
                        ->orderBy('order', 'asc')
                        ->with([
                            'learningStatus' => function ($query) use ($user) {
                                $query->where('user_id', !empty($user) ? $user->id : null);
                            }
                        ]);
                },
                'assignments' => function ($query) {
                    $query->where('status', WebinarChapter::$chapterActive);
                },
                'tickets' => function ($query) {
                    $query->orderBy('order', 'asc');
                },
                'filterOptions',
                'category',
                //    'teacher',
                'reviews' => function ($query) {
                    $query->where('status', 'active');
                    $query->with([
                        'comments' => function ($query) {
                            $query->where('status', 'active');
                        },
                        'creator' => function ($qu) {
                            $qu->select('id', 'full_name', 'avatar');
                        }
                    ]);
                },
                'comments' => function ($query) {
                    $query->where('status', 'active');
                    $query->whereNull('reply_id');
                    $query->with([
                        'user' => function ($query) {
                            $query->select('id', 'full_name', 'role_name', 'role_id', 'avatar', 'avatar_settings');
                        },
                        'replies' => function ($query) {
                            $query->where('status', 'active');
                            $query->with([
                                'user' => function ($query) {
                                    $query->select('id', 'full_name', 'role_name', 'role_id', 'avatar', 'avatar_settings');
                                }
                            ]);
                        }
                    ]);
                    $query->orderBy('created_at', 'desc');
                },
            ])
            ->withCount([
                'sales' => function ($query) {
                    $query->whereNull('refund_at');
                },
                'noticeboards'
            ])
            ->where('status', 'active')
            ->get();
        $webinar = $webinar->map(function ($webinar) {
            return $webinar->brief;
        });
        return apiResponse2(1, 'retrieved', trans('api.public.retrieved'), $webinar);*/
    }

    public function list(Request $request, $id = null)
    {
        return [
            'my_classes' => $this->myClasses($request),
            'purchases' => $this->purchases($request),
            'organizations' => $this->organizations($request),
            'invitations' => $this->invitations($request),
        ];
    }

    public function myClasses(Request $request)
    {
        $user = apiAuth();

        $webinars = Webinar::where(function ($query) use ($user) {

            if ($user->isTeacher()) {
                $query->where('teacher_id', $user->id);
            } elseif ($user->isOrganization()) {
                $query->where('creator_id', $user->id);
            }
        })->handleFilters()->orderBy('updated_at', 'desc')->get()->map(function ($webinar) {
            return $webinar->brief;
        });

        return $webinars;
    }

    public function indexPurchases()
    {
        return apiResponse2(1, 'retrieved', trans('api.public.retrieved'),
            [
                'webinars' => $this->purchases()
            ]);
    }

    public function free(Request $request, $id)
    {
        $user = apiAuth();

        $course = Webinar::where('id', $id)
            ->where('status', 'active')
            ->first();
        abort_unless($course, 404);


        $checkCourseForSale = $course->checkCourseForSale($user);

        if ($checkCourseForSale != 'ok') {
            return apiResponse2(0, $checkCourseForSale, trans('api.course.purchase.' . $checkCourseForSale));
        }

        if (!empty($course->price) and $course->price > 0) {
            return apiResponse2(0, 'not_free', trans('api.cart.not_free'));


        }

        Sale::create([
            'buyer_id' => $user->id,
            'seller_id' => $course->creator_id,
            'webinar_id' => $course->id,
            'type' => Sale::$webinar,
            'payment_method' => Sale::$credit,
            'amount' => 0,
            'total_amount' => 0,
            'created_at' => time(),
        ]);

        return apiResponse2(1, 'enrolled', trans('api.webinar.enrolled'));

    }

    public function purchases()
    {
        $user = apiAuth();
        $sales = Sale::where('sales.buyer_id', $user->id)
            ->whereNull('sales.refund_at')
            ->where('access_to_purchased_item', true)
            ->where(function ($query) {
                $query->where(function ($query) {
                    $query->whereNotNull('sales.webinar_id')
                        ->where('sales.type', 'webinar')
                        ->whereHas('webinar', function ($query) {
                            $query->where('status', 'active');
                        });
                });
                $query->orWhere(function ($query) {
                    $query->whereNotNull('sales.bundle_id')
                        ->where('sales.type', 'bundle')
                        ->whereHas('bundle', function ($query) {
                            $query->where('status', 'active');
                        });
                });
            })->with([
                'webinar' => function ($query) {
                    $query->with([
                        'files',
                        'reviews' => function ($query) {
                            $query->where('status', 'active');
                        },
                        'category',
                        'teacher' => function ($query) {
                            $query->select('id', 'full_name');
                        },
                    ]);
                    $query->withCount([
                        'sales' => function ($query) {
                            $query->whereNull('refund_at');
                        }
                    ]);
                },
                'bundle' => function ($query) {
                    $query->with([
                        'reviews' => function ($query) {
                            $query->where('status', 'active');
                        },
                        'category',
                        'teacher' => function ($query) {
                            $query->select('id', 'full_name');
                        },
                    ]);
                }
            ])
            //  ->handleFilters()
            ->orderBy('created_at', 'desc')
            ->get();
        foreach ($sales as $sale) {

            if (!empty($sale->gift_id)) {
                $gift = $sale->gift;

                $sale->webinar_id = $gift->webinar_id;
                $sale->bundle_id = $gift->bundle_id;

                $sale->webinar = !empty($gift->webinar_id) ? $gift->webinar : null;
                $sale->bundle = !empty($gift->bundle_id) ? $gift->bundle : null;

                $sale->gift_recipient = !empty($gift->receipt) ? $gift->receipt->full_name : $gift->name;
                $sale->gift_sender = $sale->buyer->full_name;
                $sale->gift_date = $gift->date;


                $giftPurchasedCount += 1;

                if (!empty($sale->webinar)) {
                    $giftDurations += $sale->webinar->duration;

                    if ($sale->webinar->start_date > $time) {
                        $giftUpcoming += 1;
                    }
                }

                if (!empty($sale->bundle)) {
                    $bundleWebinars = $sale->bundle->bundleWebinars;

                    foreach ($bundleWebinars as $bundleWebinar) {
                        $giftDurations += $bundleWebinar->webinar->duration;
                    }
                }
            }

            $purchaseDate = $sale->created_at;
            if (!empty($sale->gift_id)) {
                $gift = Gift::query()->where('id', $sale->gift_id)
                    ->where('status', 'active')
                    ->first();

                if (!empty($gift) and !empty($gift->date)) {
                    $purchaseDate = $gift->date;
                }
            }
            $time = time();
            if (!empty($sale->webinar)) {
                if ($sale->webinar->access_days > 0 ) {
                    $sale->expired = strtotime("+{$sale->webinar->access_days} days", $purchaseDate) < $time;
                    $sale->expired_at = strtotime("+{$sale->webinar->access_days} days", $purchaseDate);
                }
                else{
                    $sale->expired = false;
                    $sale->expired_at = null;
                }
                $sale->webinarW = new WebinarResource($sale->webinar);
            } else if (!empty($sale->bundle)) {
                if ($sale->bundle->access_days > 0 ) {
                    $sale->expired = strtotime("+{$sale->bundle->access_days} days", $purchaseDate) < $time;
                    $sale->expired_at = strtotime("+{$sale->bundle->access_days} days", $purchaseDate);
                }
                else{
                    $sale->expired = false;
                    $sale->expired_at = null;
                }
                $sale->bundleW = new BundleResource($sale->bundle);
            }
        }
        $arr = $sales->toArray();
        foreach ($arr as &$item){
            if (isset($item["bundleW"])){
                $item["bundle"] = $item["bundleW"];
                unset($item["bundleW"]);
            }
            if (isset($item["webinarW"])) {
                $item["webinar"] = $item["webinarW"];
                unset($item["webinarW"]);
            }
        }
        return $arr;


    }

    public function invitations(Request $request)
    {
        $user = apiAuth();

        $invitedWebinarIds = WebinarPartnerTeacher::where('teacher_id', $user->id)->pluck('webinar_id')->toArray();
        $webinars = Webinar::where('status', 'active')
            ->whereIn('id', $invitedWebinarIds)
            ->handleFilters()
            ->orderBy('updated_at', 'desc')->get()->map(function ($webinar) {
                return $webinar->brief;
            });

        return $webinars;
    }

    public function organizations()
    {
        $user = apiAuth();
        // $user=User::find(927) ;

        $webinars = Webinar::where('creator_id', $user->organ_id)
            ->where('status', 'active')->handleFilters()
            ->orderBy('created_at', 'desc')
            ->orderBy('updated_at', 'desc')->get()->map(function ($webinar) {
                return $webinar->brief;
            });

        return $webinars;
    }

    public function indexOrganizations()
    {

        return apiResponse2(1, 'retrieved', trans('api.public.retrieved'),
            [
                'webinars' => $this->organizations()
            ]);

    }

    public function offlinePurchases()
    {
        $user = apiAuth();
        $sales = Sale::where('sales.buyer_id', $user->id)
            ->whereNull('sales.refund_at')
            ->where('access_to_purchased_item', true)
            ->where(function ($query) {
                $query->where(function ($query) {
                    $query->whereNotNull('sales.webinar_id')
                        ->where('sales.type', 'webinar')
                        ->whereHas('webinar', function ($query) {
                            $query->where('status', 'active');
                        });
                });
                $query->orWhere(function ($query) {
                    $query->whereNotNull('sales.bundle_id')
                        ->where('sales.type', 'bundle')
                        ->whereHas('bundle', function ($query) {
                            $query->where('status', 'active');
                        });
                });
            })->with([
                'webinar' => function ($query) {
                    $query->with([
                        'files',
                        'reviews' => function ($query) {
                            $query->where('status', 'active');
                        },
                        'category',
                        'teacher' => function ($query) {
                            $query->select('id', 'full_name');
                        },
                    ]);
                    $query->withCount([
                        'sales' => function ($query) {
                            $query->whereNull('refund_at');
                        }
                    ]);
                },
                'bundle' => function ($query) {
                    $query->with([
                        'reviews' => function ($query) {
                            $query->where('status', 'active');
                        },
                        'category',
                        'teacher' => function ($query) {
                            $query->select('id', 'full_name');
                        },
                    ]);
                }
            ])
            ->orderBy('created_at', 'desc')
            ->get();

        return apiResponse2(1, 'retrieved', trans('api.public.retrieved'),
            [
                $sales
            ]);
    }

}
