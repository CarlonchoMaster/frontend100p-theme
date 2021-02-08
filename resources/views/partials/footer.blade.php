<footer class="content-info footer">
    <div class="container has-text-centered">
        @php dynamic_sidebar('sidebar-footer') @endphp
        <div class="columns">
            <p class="column is-two-thirds">&copy;Frontent:100p Copyright {{ date('Y') }} | Todos los derecho reservados | <a href="#">Politica de Privacidad</a></p>
            <div class="social-networks column">
                <a class="social-network" href="">
                    @svg('icon-whatsapp', 'network-whatsapp')
                </a>
                <a class="social-network" href="https://www.linkedin.com/in/carlos-pereda" target="_blank">
                    @svg('icon-linkedin', 'network-linkedin')
                </a>
                <a class="social-network" href="https://www.facebook.com/carlospered4" target="_blank">
                    @svg('icon-facebook', 'network-facebook')
                </a>
                <a class="social-network" href="https://www.youtube.com/c/CarlonchoMaster" target="_blank">
                    @svg('icon-youtube', 'network-youtube')
                </a>
            </div>
        </div>
    </div>
</footer>
