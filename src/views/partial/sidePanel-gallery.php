<div id="panel-bg" onclick="panelTransform();"></div>
<div id="side-panel">
    <svg id="closeButton" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 47 47" onclick="panelTransform();">
        <defs>
            <style>
                .b {
                    fill: #fff;
                }
            </style>
        </defs>
        <g>
            <rect class="b" x="19" y="-4.23" width="9.01" height="55.46"
                transform="translate(-9.73 23.5) rotate(-45)" />
            <path class="b"
                d="M7.08,1.41L45.59,39.92l-5.66,5.66L1.41,7.08,7.08,1.41m0-1.41L0,7.08,39.92,47l7.08-7.08L7.08,0h0Z" />
        </g>
        <g>
            <rect class="b" x="-4.28" y="19.05" width="55.57" height="8.9"
                transform="translate(-9.73 23.5) rotate(-45)" />
            <path class="b" d="M40,1.41l5.59,5.59L7,45.59l-5.59-5.59L40,1.41M40,0L0,40l7,7L47,7,40,0h0Z" />
        </g>
    </svg>
    <nav>
        <?php if (!isset($_SESSION['isLoggedIn'])): ?>
            <a class="option" href="/login">
                <h4>Log In</h4>
            </a>
        <?php else: ?>
            <div id="userInfo">
                <img src="img/icons/userIco.svg" width="20px" height="20px" style="display: inline;">
                <h4 style="color:white; display: inline;">
                    <?= $_SESSION['username'] ?>
                </h4>
            </div>
            <a class="option" href="/logout">
                <h4>Log Out</h4>
            </a>
        <?php endif ?>
        <br>
        <a class="option" href="/gallery?page=1">
            <h4>Image gallery</h4>
        </a>
        <a class="option" href="/register?error=0">
            <h4>Create Account</h4>
        </a>

        <br>
        <a class="option" href="/main">
            <h4>Main page</h4>
        </a>
    </nav>
</div>