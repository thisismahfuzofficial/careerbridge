<form id="delete-action-{{ $id }}" action="{{ $route }}" method="POST" style="display: none;">
    @csrf
    @method('DELETE')
</form>

<button type="button" class="btn btn-danger"
    onclick="if (confirm('Are you sure you want to delete this item?')) { document.getElementById('delete-action-{{ $id }}').submit(); }">
    <i class="bx bx-trash"></i>
</button>
