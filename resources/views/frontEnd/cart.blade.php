@extends("frontEnd.layout")
@section("title")
    BEM Energy-panier
@endsection
@section("content")
 <!-- Page Header Start -->
 <div class="container-fluid page-header py-5 mb-5">
    <div class="container py-5">
        <h1 class="display-3 text-white mb-3 animated slideInDown">Panier</h1>
    </div>
</div>
<!-- Page Header End -->


<div class="container pb-5 mb-5">
    <div>
        <div>
            <div class="modal-content">
                <div class="modal-body">
                    <!-- Cart Item 1 -->
                    <div class="d-flex align-items-center justify-content-between border-bottom pb-2 mb-2">
                        <img src="img/p (1).jpg" alt="Product 1" class="img-fluid rounded" width="200">
                        <div class="flex-grow-1 mx-3">
                            <div class="container">
                                <h4 class="mb-1 fw-bold">Produit 01</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, aperiam veniam et, maiores veritatis modi quasi, optio sint error aspernatur illum totam ut rem ea repudiandae quo fugit laudantium sed.</p>
                                <div class="d-flex align-items-center">
                                    <button class="btn btn-outline-secondary ">-</button>
                                    <input type="text" class="form-control text-center mx-2" value="2" style="width: 40px;">
                                    <button class="btn btn-outline-secondary ">+</button>
                                </div>
                            </div>
                            
                            
                        </div>
                        <p class="fw-bold mb-0">$99</p>
                        <button class="btn btn-link text-danger"><i class="fa fa-times"></i></button>
                    </div>

                    <!-- Cart Item 2 -->
                    <div class="d-flex align-items-center justify-content-between border-bottom pb-2 mb-2">
                        <img src="img/p (1).jpg" alt="Product 2" class="img-fluid rounded" width="200">
                        <div class="flex-grow-1 mx-3">
                            <div class="container">
                                <h4 class="mb-1 fw-bold">Produit 01</h4>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae, aperiam veniam et, maiores veritatis modi quasi, optio sint error aspernatur illum totam ut rem ea repudiandae quo fugit laudantium sed.</p>
                                <div class="d-flex align-items-center">
                                    <button class="btn btn-outline-secondary ">-</button>
                                    <input type="text" class="form-control text-center mx-2" value="2" style="width: 40px;">
                                    <button class="btn btn-outline-secondary ">+</button>
                                </div>
                            </div>
                            
                            
                        </div>
                        <p class="fw-bold mb-0">$99</p>
                        <button class="btn btn-link text-danger"><i class="fa fa-times"></i></button>
                    </div>

                    <!-- Total -->
                    <div class="d-flex justify-content-between mt-3">
                        <strong>Total:</strong>
                        <strong>$198</strong>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="" class="btn btn-primary">Commander</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
@section("active")
<script>
    document.querySelectorAll('.nav-item')[6].classList.add('active');
</script>
@endsection