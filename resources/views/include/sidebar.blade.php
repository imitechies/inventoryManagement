<nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
    <div class="sb-sidenav-menu">
        <div class="nav">
            <!-- frist collapse -->
            <section>
                <a class="nav-link" href="{{route('dashboard')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
            </section>
            <!-- Second collapse -->
            <section>
                <a class="nav-link" href="{{route('manage-category-list')}}">
                    <div class="sb-nav-link-icon"><i class="fas fa-store"></i></div>
                    Category
                </a>
            </section>
            <!-- Third collapse -->
            <section>
                <a class="nav-link collapsed" href="#!" data-bs-toggle="collapse" data-bs-target="#Sub-Category" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-store"></i></div>
                    Sub Category
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="Sub-Category" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="#!">Add Category</a>
                        <a class="nav-link" href="#!">Manage Category</a>
                    </nav>
                </div>
            </section>

            <section>
                <a class="nav-link collapsed" href="#!" data-bs-toggle="collapse" data-bs-target="#Brand" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-store"></i></div>
                    Brand
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="Brand" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="#!">Add Brand</a>
                        <a class="nav-link" href="#!">Manage Brand</a>
                    </nav>
                </div>
            </section>

            <section>
                <a class="nav-link collapsed" href="#!" data-bs-toggle="collapse" data-bs-target="#Product" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-store"></i></div>
                    Product
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="Product" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="#!">Manage Product</a>
                    </nav>
                </div>
            </section>

            <section>
                <a class="nav-link" href="#!">
                    <div class="sb-nav-link-icon"><i class="fas fa-store"></i></div>
                    Inventory
                </a>
            </section>

            <section>
                <a class="nav-link" href="#!">
                    <div class="sb-nav-link-icon"><i class="fas fa-store"></i></div>
                    Card
                </a>
            </section>

            <section>
                <a class="nav-link" href="#!">
                    <div class="sb-nav-link-icon"><i class="fas fa-store"></i></div>
                    Search
                </a>
            </section>

            <section>
                <a class="nav-link" href="#!">
                    <div class="sb-nav-link-icon"><i class="fas fa-store"></i></div>
                    Customer Details
                </a>
            </section>

            <section>
                <a class="nav-link collapsed" href="#!" data-bs-toggle="collapse" data-bs-target="#report" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-store"></i></div>
                    Report
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="report" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="#!">Stock Report</a>
                        <a class="nav-link" href="#!">Sales Report</a>
                    </nav>
                </div>
            </section>
        </div>
    </div>
</nav>