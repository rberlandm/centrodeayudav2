<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link " href="../../index.php">
                <i class="bi bi-envelope"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="/views/registro.php">
                <i class="bi bi-envelope"></i>
                <span>Registro</span>
            </a>
        </li>


        <li class="nav-item">
        <a class="nav-link collapsed" href="/views/ordenes.php">
                <i class="bi bi-envelope"></i>
                <span>Ordenes</span>
            </a>
        </li>


        <li class="nav-item">
        <a class="nav-link collapsed" href="/views/polizas.php">

                <i class="bi bi-envelope"></i>
                <span>Pólizas</span>
            </a>
        </li>

        <li class="nav-item">
        <a class="nav-link collapsed" href="/views/redmedica.php">
                <i class="bi bi-card-list"></i>
                <span>Red Medica</span>
            </a>
        </li>

    </ul>

</aside><!-- End Sidebar-->


<script>
    $(document).ready(function () {
    $(".nav-link").click(function () {
        console.log("cargando");
        $(".nav-link").removeClass('active2');
        $(this).addClass('active2');
    });
});

</script>
