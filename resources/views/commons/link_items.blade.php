@if (Auth::check())
    {{-- タスク一覧ページへのリンク --}}
    <li><a class="link link-hover" href="#">{{ Auth::user()->name }}&#39;s Tasks</a></li>
    {{-- タスク編集ページへのリンク --}}
    <li><a class="link link-hover" href="#">edit</a></li>
    {{-- ログアウトへのリンク --}}
    <li><a class="link link-hover" href="#" onclick="event.preventDefault();this.closest('form').submit();">Logout</a></li>
@else
    {{-- ユーザー登録ページへのリンク --}}
    <li><a class="link link-hover" href="{{ route('register') }}">Signup</a></li>
    {{-- ログインページへのリンク --}}
    <li><a class="link link-hover" href="{{ route('login') }}">Login</a></li>
@endif