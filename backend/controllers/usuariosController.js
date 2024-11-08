const pool = require('../db');

exports.crearUsuario = async (req, res) => {
    const { nombre, apellido, email, password } = req.body;
    try {
        const [result] = await pool.query(
            'INSERT INTO usuarios (nombre, apellido, email, password) VALUES (?, ?, ?, ?)',
            [nombre, apellido, email, password]
        );
        res.status(201).json({ id_usuario: result.insertId });
    } catch (error) {
        res.status(500).json({ error: error.message });
    }
};

exports.obtenerUsuarios = async (req, res) => {
    try {
        const [usuarios] = await pool.query('SELECT * FROM usuarios');
        res.json(usuarios);
    } catch (error) {
        res.status(500).json({ error: error.message });
    }
};

exports.obtenerUsuarioPorId = async (req, res) => {
    const { id } = req.params;
    try {
        const [usuario] = await pool.query('SELECT * FROM usuarios WHERE id_usuario = ?', [id]);
        res.json(usuario[0] || null);
    } catch (error) {
        res.status(500).json({ error: error.message });
    }
};

exports.actualizarUsuario = async (req, res) => {
    const { id } = req.params;
    const { nombre, apellido, email, password } = req.body;
    
    try {
        await pool.query(
            'UPDATE usuarios SET nombre = ?, apellido = ?, email = ?, password = ? WHERE id_usuario = ?',
            [nombre, apellido, email, password, id]
        );
        res.sendStatus(204);
    } catch (error) {
        res.status(500).json({ error: error.message });
    }
};

exports.eliminarUsuario = async (req, res) => {
    const { id } = req.params;
    try {
        await pool.query('DELETE FROM usuarios WHERE id_usuario = ?', [id]);
        res.sendStatus(204);
    } catch (error) {
        res.status(500).json({ error: error.message });
    }
};
