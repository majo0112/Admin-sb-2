<div class="modal fade" id="certificadoModal" tabindex="-1" aria-labelledby="certificadoModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="certificadoModalLabel">Certificado de ausencia</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="justificarForm" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="aprendiz" class="col-form-label">Aprendiz*</label>
                        <input type="text" class="form-control" id="aprendiz" name="aprendiz" required>
                    </div>
                    <div class="mb-3">
                        <label for="descripcion" class="col-form-label">Descripción:</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" required></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="certificado" class="form-label">Certificado*</label>
                        <input class="form-control" type="file" id="certificado" name="certificado" accept="application/pdf" required>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                <button type="button" class="btn btn-primary" id="enviarBtn">Enviar</button>
            </div>
        </div>
    </div>
</div>
