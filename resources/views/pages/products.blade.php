@extends('templates.base')

@section('content')

<div class="container mx-auto p-6">

    <div class="flex items-center">
        <h1 class="text-4xl pr-60">Products</h1>
        <form hx-get="/api/products"
              hx-target="#products-list"
              hx-trigger="submit">
            <input type="text"
                   name="filter"
                   class="p-2 border border-gray-300 ml-5 mr-2 rounded"
                   placeholder="Filter products">
                
        </form>
        <button id="openModalBtn" class="btn bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-700 transition duration-300">Add Product</button>
  
        </div>
    <hr class="my-4">
    <div id="products-list" class="flex flex-wrap gap-3" hx-get="/api/products" hx-trigger="load" hx-swap="innerHTML"></div>

    <div id="myModal" class="modal fixed inset-0 flex items-center justify-center bg-black bg-opacity-50 hidden">
        <div class="modal-content bg-white p-6 rounded-lg shadow-lg w-full max-w-md" hx-get="/open" hx-trigger="load" hx-swap="innerHTML">
          
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {

    document.getElementById("openModalBtn").addEventListener('click', function() {

    var modal = document.getElementById("myModal");

    modal.classList.remove("hidden");

    });

});
    
function closeModal() {
 
    var modal = document.querySelector('.modal');

    if (modal) {
        modal.classList.add('hidden'); 
    }

    var inputs = document.querySelectorAll('#modalForm input');
    inputs.forEach(function(input) {
        input.value = '';
    });
    
    var message = document.getElementById('success');
    if (message) {
        message.style.display = 'none';
    }

}
</script>



@endsection
