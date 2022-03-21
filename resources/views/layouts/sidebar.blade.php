<aside>
    <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->
        <ul class="sidebar-menu">
            <li class="active">
                <a class="" href="/home">
                    <i class="icon_house_alt"></i>
                    <span>Início</span>
                </a>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon_document_alt"></i>
                    <span>Cursos</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="{{ route('course.index') }}">Todos Cursos</a></li>
                    <li><a class="" href="/course/create">Criar Curso</a></li>
                </ul>
            </li>
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon_desktop"></i>
                    <span>Seções</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="{{ route('section.index') }}">Efetivo</a></li>
                    <li><a class="" href="{{ route('section.headship') }}">Chefia DPL</a></li>
                    <li><a class="" href="{{ route('section.secretary') }}">Secretaria DPL</a></li>
                    <li><a class="" href="/section/SDO">SDO</a></li>
                    <li><a class="" href="/section/SEN">SEN</a></li>
                    <li><a class="" href="/section/SRH">SRH</a></li>
                    <li><a class="" href="/section/SED">SED</a></li>
                    @if(Auth::user()->hasAnyRole('admin'))
                    <li><a class="" href="/section/create">Criar Seções</a></li>
                    @endif
                </ul>
            </li>
            <li>
                <a class="" href="widgets.html">
                    <i class="icon_pin"></i>
                    <span>Calendário DPL</span>
                </a>
            </li>
            <li>
                <a class="" href="chart-chartjs.html">
                    <i class="icon_piechart"></i>
                    <span>Briefings</span>

                </a>

            </li>

            @if(Auth::user()->hasAnyRole('admin'))
            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon_table"></i>
                    <span>Usuários</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="{{route('admin.users.index')}}">Editar Usuários</a></li>
                    <li><a class="" href="basic_table.html">Basic Table</a></li>
                </ul>
            </li>

            <li class="sub-menu">
                <a href="javascript:;" class="">
                    <i class="icon_table"></i>
                    <span>Funções</span>
                    <span class="menu-arrow arrow_carrot-right"></span>
                </a>
                <ul class="sub">
                    <li><a class="" href="{{route('admin.roles.index')}}">Editar Funções</a></li>
                </ul>
            </li>


            @endif

{{--            <li class="sub-menu">--}}
{{--                <a href="javascript:;" class="">--}}
{{--                    <i class="icon_documents_alt"></i>--}}
{{--                    <span>Pages</span>--}}
{{--                    <span class="menu-arrow arrow_carrot-right"></span>--}}
{{--                </a>--}}
{{--                <ul class="sub">--}}
{{--                    <li><a class="" href="profile.html">Profile</a></li>--}}
{{--                    <li><a class="" href="login.html"><span>Login Page</span></a></li>--}}
{{--                    <li><a class="" href="contact.html"><span>Contact Page</span></a></li>--}}
{{--                    <li><a class="" href="blank.html">Blank Page</a></li>--}}
{{--                    <li><a class="" href="404.html">404 Error</a></li>--}}
{{--                </ul>--}}
{{--            </li>--}}

        </ul>
        <!-- sidebar menu end-->
    </div>
</aside>
