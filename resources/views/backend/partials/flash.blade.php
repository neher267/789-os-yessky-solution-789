<div style="width: 100%; text-align: center;">
    @if (session('success'))
        <div class="alert alert-success flash" style="color: white; text-transform: capitalize;">
            {{ session('success') }}
        </div>
    @endif
</div>