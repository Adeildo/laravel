@if(count($errors) > 0)
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3 error">
            <ul>
                @foreach($errors->all() as $error)
                    <li>
                        {{$error}}
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
@endif
@if(Session::has('message'))
    <div class="row">
        <div class="col-lg-6 col-lg-offset-3 success">
            {{ Session::get('message') }}
        </div>
    </div>
@endif