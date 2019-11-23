<ul class="main-menu">
    <li><a class="{{\Illuminate\Support\Facades\Request::is('/*') ? 'active' : ''}}" href="{{route('home')}}">Home</a>
    </li>
    <li class="menu-item-has-children">
        <a class="{{\Illuminate\Support\Facades\Request::is('about*') ? 'active' : ''}}" href="#">About <i
                class="fa fa-angle-down"></i></a>
        <ul class="dropdown-menu dropdown-arrow">
            <li><a href="{{route('president-message')}}">President Message</a></li>
            <li><a href="{{route('brief-history')}}">Brief History</a></li>
            <li><a href="{{route('vision-mission')}}">Vision & Mission</a></li>
            <li><a href="{{route('organization-chart')}}">Organization Chart</a></li>
        </ul>
    </li>
    <li><a class="{{ \Illuminate\Support\Facades\Request::is('services') ? 'active' : '' }}"
           href="{{route('services')}}">Services</a></li>
    <li><a class="{{ \Illuminate\Support\Facades\Request::is('qhse-commitment') ? 'active' : '' }}"
           href="{{route('qhse-commitment')}}">QHSE Commitment</a></li>
    <li><a class="{{ \Illuminate\Support\Facades\Request::is('project-experiences') ? 'active' : '' }}"
           href="{{route('project-experiences')}}">Project Experiences</a></li>
    <li><a class="{{ \Illuminate\Support\Facades\Request::is('contact') ? 'active' : '' }}"
           href="{{route('contact')}}">Contact</a></li>
</ul>
