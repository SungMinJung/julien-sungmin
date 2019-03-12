@foreach ($popupList as $popup)
    <div class="popup">
            <img src="{{ $popup }}">
            <a href="#" class="popup_delete">
                <img src="http://julienwaffle.com/wp-content/plugins/bbs-e-popup/images/btn_close/btn_close01.png">
            </a>
        </div>    
@endforeach