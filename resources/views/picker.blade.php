@extends('layout')

@section('content')

    <style>
        label:before {
            content: url("https://cdn1.iconfinder.com/data/icons/windows8_icons_iconpharm/26/unchecked_checkbox.png");
            position: absolute;
            z-index: 100;
        }
        :checked+label:before {
            content: url("https://cdn1.iconfinder.com/data/icons/windows8_icons_iconpharm/26/checked_checkbox.png");
        }
        input[type=checkbox] {
            display: none;
        }
        /*pure cosmetics:*/
        img {
            width: 150px;
            height: 150px;
        }
        label {
            margin: 10px;
        }
    </style>

    <div class="container" style="padding-top: 50px;">
        <form action="post">
        <div class="row">
            <div class="col-md-6">
                <div class="panel panel-info col-md-6">
                    test
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-warning col-md-6">
                    <input type="checkbox" id="game2">
                    <label for="game2">
                        <img src="{{ asset('/images/patriots.gif') }}" alt="">
                    </label>
                </div>
            </div>
        </div>
        </form>
    </div>

@endsection

@section('scripts')
    $(document).ready(function() {
        console.log('test');
    });
@endsection