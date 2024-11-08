const pool = require('../db');

exports.verificarCredencialesAdmin = async (req, res) => {
    const { email, password } = req.body;
    
    try {
        const [admin] = await pool.query(
            'SELECT * FROM usuarios WHERE email = ? AND password = ?',
            [email, password]
        );

        if (admin.length > 0) {
            res.status(200).json({ message: 'Login exitoso', admin: admin[0] });
        } else {
            res.status(401).json({ error: 'Credenciales incorrectas' });
        }
    } catch (error) {
        res.status(500).json({ error: error.message });
    }
};
