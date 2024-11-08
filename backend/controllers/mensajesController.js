const pool = require('../db');

exports.crearMensaje = async (req, res) => {
    const { id_usuario_emisor, id_usuario_receptor, contenido } = req.body;
    try {
        const [result] = await pool.query(
            'INSERT INTO mensajes (id_usuario_emisor, id_usuario_receptor, contenido) VALUES (?, ?, ?)',
            [id_usuario_emisor, id_usuario_receptor, contenido]
        );
        res.status(201).json({ id_mensaje: result.insertId });
    } catch (error) {
        res.status(500).json({ error: error.message });
    }
};

exports.obtenerMensajes = async (req, res) => {
    const { emisor, receptor } = req.params;
    try {
        const [mensajes] = await pool.query(
            'SELECT * FROM mensajes WHERE (id_usuario_emisor = ? AND id_usuario_receptor = ?) OR (id_usuario_emisor = ? AND id_usuario_receptor = ?)',
            [emisor, receptor, receptor, emisor]
        );
        res.json(mensajes);
    } catch (error) {
        res.status(500).json({ error: error.message });
    }
};

exports.eliminarMensaje = async (req, res) => {
    const { id } = req.params;
    try {
        await pool.query('DELETE FROM mensajes WHERE id_mensaje = ?', [id]);
        res.sendStatus(204);
    } catch (error) {
        res.status(500).json({ error: error.message });
    }
};
