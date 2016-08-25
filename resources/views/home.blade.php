@extends('template')
@section('head')
<link rel="stylesheet" href="{{asset('css/home.css')}}" />
@endsection
@section('body')
<div class="pure-g">
    <div class="pure-u-14-24">
        <div class="l-box">
            <h1><strong>Naughton & Ross</strong> is a design & development studio based in <strong>Melbourne, Australia</strong>.</h1>
            <h1>Focusing our work on <strong>Web Design & Development</strong>, we can also help with graphic design, print and publishing design, stationery, and photography.</h1>
        </div>
    </div>
    <div class="pure-u-2-24"></div>
    <div class="pure-u-4-24">
        <div class="pure-u-1 home_square first text">
            <div class="l-box">
                <p>
                    News <span>&middot;</span> Web &#8212;
                </p>
                <h2><i>Little Sports Heroes</i> goes online</h2>
            </div>
        </div>
        <div class="pure-u-1 home_square clear">

        </div>
    </div>
    <div class="pure-u-4-24">
        <div class="pure-u-1 home_square clear">

        </div>
        <div class="pure-u-1 home_square second">

        </div>
    </div>
</div>
<div class="pure-g">
    <div class="pure-u-4-24">
        <div class="pure-u-1 home_square">

        </div>
    </div>
    <div class="pure-u-4-24">
        <div class="pure-u-1 home_square img biglife">

        </div>
    </div>
    <div class="pure-u-4-24">
        <div class="pure-u-1 home_square">

        </div>
    </div>
    <div class="pure-u-4-24">
        <div class="pure-u-1 home_square img rubix">

        </div>
    </div>
    <div class="pure-u-4-24">
        <div class="pure-u-1 home_square">

        </div>
    </div>
    <div class="pure-u-4-24">
        <div class="pure-u-1 home_square clear">

        </div>
    </div>
    <div class="pure-u-4-24">
        <div class="pure-u-1 home_square img pwps">

        </div>
    </div>
    <div class="pure-u-4-24">
        <div class="pure-u-1 home_square">

        </div>
    </div>
    <div class="pure-u-4-24">
        <div class="pure-u-1 home_square colour yellow text">
            <div class="l-box">
                <p>
                    News <span>&middot;</span> Web &#8212;
                </p>
                <h2><i>Little Sports Heroes</i> goes online</h2>
            </div>
        </div>
    </div>
    <div class="pure-u-4-24">
        <div class="pure-u-1 home_square clear">

        </div>
    </div>
    <div class="pure-u-4-24">
        <div class="pure-u-1 home_square img bsh">

        </div>
    </div>
    <div class="pure-u-4-24">
        <div class="pure-u-1 home_square">

        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        var cw = $('.home_square').width();
        $('.home_square').css({'height':cw+'px'});
        $(window).on('resize', function(){
            var cw = $('.home_square').width();
            $('.home_square').css({'height':cw+'px'});
        });
    });
</script>
@endsection
