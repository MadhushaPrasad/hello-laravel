<h1>About the home view</h1>
<h1> URL Generator</h1>
<div>
    {{--{{URL::current()}} get current URL--}}
    {{URL::current()}}
    <a href="{{URL::to('about')}}">About</a>

    {{--  get last URL --}}
    <a href="{{URL::previous()}}">Last URL is :{{URL::previous()}} </a>


    <br>

    <form action="{{URL::to('/save_data')}}" method="post">
        <input type="text" name="name" id="name">
        <button>Submit</button>
    </form>
</div>
