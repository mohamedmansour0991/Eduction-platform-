@php
    $socials = getSocials();
    if (!empty($socials) and count($socials)) {
        $socials = collect($socials)->sortBy('order')->toArray();
    }

    $footerColumns = getFooterColumns();
@endphp

<footer style='background: #334155 !important;' class="footer bg-secondary position-relative user-select-none">
 

    @php
        $columns = ['first_column','second_column','third_column','forth_column'];
    @endphp

    <div class="container">


        <div class="py-50 " style='margin: auto;display: table;'>
           

            <div class="footer-social">
                @if(!empty($socials) and count($socials))
                    @foreach($socials as $social)
                        <a href="{{ $social['link'] }}" target="_blank">
                            <img src="{{ $social['image'] }}" alt="{{ $social['title'] }}" >
                        </a>
                    @endforeach
                @endif
            </div>
<br><br>
            <div style='    text-align: center;' class="font-14 text-white">All Copy Rights Reserved @2024 
                <br>
                <a style='color:#eee' href='https://www.facebook.com/Marhala.eg'>Developed By Marhala</a></div>
        </div>
    </div>

   

</footer>
