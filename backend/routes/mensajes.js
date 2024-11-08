const express = require('express');
const router = express.Router();
const mensajesController = require('../controllers/mensajesController');

router.post('/', mensajesController.crearMensaje);
router.get('/:emisor/:receptor', mensajesController.obtenerMensajes);
router.delete('/:id', mensajesController.eliminarMensaje);

module.exports = router;
