<nav class="top-bar" data-topbar role="navigation">
    <ul class="title-area">
        <li class="name">
            <h1><a href="home.php">Parse Application</a></h1>
        </li>
        <li class="toggle-topbar menu-icon">
            <a href="javascript:;">
                <span></span>
            </a>
        </li>
    </ul>

    <section class="top-bar-section">
        <ul class="right">
            <li class="active">
                <a href="home.php">Home</a>
            </li>
            <li class="has-dropdown">
                <a href="javascript:;">
                    Hi
                    <?php
                    $user = ParseUser::getCurrentUser();
                    $query = ParseUser::query();
                    $query->equalTo('email', $user);
                    $result = $query->find();

                    foreach($result as $row)
                    {
                        echo $row->name;
                    }
                    ?>
                </a>
                <ul class="dropdown">
                    <li>
                        <a href="logout.php">Logout</a>
                    </li>
                </ul>
            </li>
        </ul>
    </section>
</nav>