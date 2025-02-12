

@if($alert = session()->pull('alert'))
    <div class="alert alert-{{ $alert['type']}} mb-0 rounded-0 text-center small py-2">
        {{  $alert['text'] }}
    </div>
@endif
