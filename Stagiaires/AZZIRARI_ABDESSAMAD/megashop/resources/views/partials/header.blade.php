<header>
    <div class="header-content">
        <div class="logo">MegaShop</div>

        <nav>
            <ul>
                <li><a href="/">Accueil</a></li>

                <li><a href="{{ route('categories.show', 'informatique') }}">Informatique</a></li>

                <li><a href="{{ route('categories.show', 'petit_electromenager') }}">Petit Électroménager</a></li>

                <li><a href="{{ route('categories.show', 'grand_electromenager') }}">Grand Électroménager</a></li>

                <li><a href="{{ route('cgv') }}">CGV</a></li>
                
                <li><a href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </nav>
    </div>
</header>