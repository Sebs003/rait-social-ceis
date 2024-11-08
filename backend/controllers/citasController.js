const pool = require('../db');

exports.crearCita = async (req, res) => {
    const { nombre_cliente, email_cliente, fecha_hora, servicio, comentarios } = req.body;
    try {
        const [result] = await pool.query(
            'INSERT INTO citas (nombre_cliente, email_cliente, fecha_hora, servicio, comentarios) VALUES (?, ?, ?, ?, ?)',
            [nombre_cliente, email_cliente, fecha_hora, servicio, comentarios]
        );
        res.status(201).json({ id_cita: result.insertId });
    } catch (error) {
        res.status(500).json({ error: error.message });
    }
};

exports.obtenerCitas = async (req, res) => {
    try {
        const [citas] = await pool.query('SELECT * FROM citas');
        res.json(citas);
    } catch (error) {
        res.status(500).json({ error: error.message });
    }
};

exports.obtenerCitaPorId = async (req, res) => {
    const { id } = req.params;
    try {
        const [cita] = await pool.query('SELECT * FROM citas WHERE id_cita = ?', [id]);
        res.json(cita[0] || null);
    } catch (error) {
        res.status(500).json({ error: error.message });
    }
};

exports.actualizarCita = async (req, res) => {
    const { id } = req.params;
    const { nombre_cliente, email_cliente, fecha_hora, servicio, comentarios } = req.body;
    try {
        await pool.query(
            'UPDATE citas SET nombre_cliente = ?, email_cliente = ?, fecha_hora = ?, servicio = ?, comentarios = ? WHERE id_cita = ?',
            [nombre_cliente, email_cliente, fecha_hora, servicio, comentarios, id]
        );
        res.sendStatus(204);
    } catch (error) {
        res.status(500).json({ error: error.message });
    }
};

exports.eliminarCita = async (req, res) => {
    const { id } = req.params;
    try {
        await pool.query('DELETE FROM citas WHERE id_cita = ?', [id]);
        res.sendStatus(204);
    } catch (error) {
        res.status(500).json({ error: error.message });
    }
};
