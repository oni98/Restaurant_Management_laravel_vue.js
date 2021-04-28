<div class="deznav">
    <div class="deznav-scroll">
        <ul class="metismenu" id="menu">
            <li><a class="{{ strpos($url=url()->current(), "dashboard")?"active":""}}" href="dashboard" aria-expanded="false">
                    <i class="flaticon-025-dashboard"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            <li><a class="has-arrow ai-icon" aria-expanded="false">
                <i class="fa fa-cutlery"></i>
                    <span class="nav-text">Foods</span>
                </a>
                <ul aria-expanded="false">
                    <li><a class="{{ strpos($url=url()->current(), "addMenu")?"active":""}}" href="add_menu">Add Menu</a></li>
                    <li><a class="{{ strpos($url=url()->current(), "available_foods")?"active":""}}" href="available_foods">Available Foods</a></li>
                </ul>
            </li>
            <li><a class="{{ strpos($url=url()->current(), "reservations")?"active":""}}" href="reservations" aria-expanded="false">
                    <i class="fa fa-list"></i>
                    <span class="nav-text">Reservations</span>
                </a>
            </li>
            <li><a class="{{ strpos($url=url()->current(), "message")?"active":""}}" href="message" aria-expanded="false">
                <i class="fa fa-envelope"></i>
                    <span class="nav-text">Messages</span>
                </a>
            </li>
        </ul>
    </div>
</div>
