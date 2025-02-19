
<nav>
        <ul>
            <li class="{{ setActive('home')}}"><a href="{{  route('home') }}">@lang('home') </a></li>
            <li class="{{ setActive('about')}}" ><a href="{{ route('about')}}">@lang('about' )</a></li>
            <li class="{{ setActive('contact')}}"> </li><a href="{{route('contact')}}">@lang('contact') </a></li>
            <li class="{{ setActive('project.index')}}"><a href="{{route('projects.index')}}">@lang('projects')</a></li>
        </ul>
    </nav>