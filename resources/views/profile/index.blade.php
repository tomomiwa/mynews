@extends('layouts.front')

@section('content')
    <div class="container">
        <hr color="#c0c0c0">
        @if (!is_null($headline))
            <div class="row">
                <div class="headline col-md-10 mx-auto">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="caption mx-auto">
                                <div class="title p-2">
                                    <h1>プロフィール</h1>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                           <div class="col-md-12">
                            <p class="body mx-auto">氏名</p>
                            <p class="body mx-auto">{{ str_limit($headline->name, 650) }}</p>
                            <br>
                            <p class="body mx-auto">性別</p>
                            <p class="body mx-auto">{{ str_limit($headline->gender, 650) }}</p>
                            <br>
                            <p class="body mx-auto">趣味</p>
                            <p class="body mx-auto">{{ str_limit($headline->hobby, 650) }}</p>
                            <br>
                            <p class="body mx-auto">自己紹介</p>
                            <p class="body mx-auto">{{ str_limit($headline->introduction, 650) }}</p>
                           </div>
                         </div>
                    </div>
                </div>
            </div>
        @endif
    </div>
@endsection