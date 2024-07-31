

<!-- // END drawer-layout -->
</div>

<div class="quote-container">
    <blockquote>
        Developed and maintained by <a href="javascript:void(0);">IMAS Medical</a>
    </blockquote>
</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
<script>
    @if(session('success'))
           Swal.fire("Success!", "{{ session('success') }}", "success");
       @elseif(session('error'))
           Swal.fire("Error!", "{{ session('error') }}", "error");
       @endif
</script>
<script src="{{ asset('admin-assets/js/main.js') }}"></script>
</body>

</html>
