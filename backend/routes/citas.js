const express = require('express');
const router = express.Router();
const citasController = require('../controllers/citasController');

router.post('/', citasController.crearCita);
router.get('/', citasController.obtenerCitas);
router.get('/:id', citasController.obtenerCitaPorId);
router.put('/:id', citasController.actualizarCita);
router.delete('/:id', citasController.eliminarCita);

module.exports = router;
