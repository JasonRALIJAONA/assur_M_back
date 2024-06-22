<footer class="footer">
    <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted text-center text-sm-left d-block d-sm-inline-block"> <a href="" target="_blank"></a> </span>
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"></span>
    </div>
</footer>

<script>

function showEditForm(id, email, nom, prenom, adresse, naissance, telephone) {
    document.getElementById('editFormId').value = id;
    document.getElementById('editFormEmail').value = email;
    document.getElementById('editFormContainer').classList.remove('hidden');
}

    function hideEditForm() {
        document.getElementById('editFormContainer').classList.add('hidden');
    }
</script>