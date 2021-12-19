    <div class="py-12">
        <div class="">
            <div class="">
                <div class="">
                    You're logged in!
                </div>
            </div>

        <!-- logout -->
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <x-dropdown-link :href="route('logout')"
                onclick="event.preventDefault();
                this.closest('form').submit();">
                {{ __('Log Out') }}
            </x-dropdown-link>
        </form>
    </div>

