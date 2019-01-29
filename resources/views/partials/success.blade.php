@if(session('status'))
    <div class="success">
        <p>{{session('status')}}</p>
    </div>
@endif