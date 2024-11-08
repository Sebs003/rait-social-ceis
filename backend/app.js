const express = require('express');
const cors = require('cors');
const usuariosRoutes = require('./routes/usuarios');
const citasRoutes = require('./routes/citas');
const mensajesRoutes = require('./routes/mensajes');
const adminRoutes = require('./routes/admin');

const app = express();
app.use(cors());
app.use(express.json());

app.use('/admin', adminRoutes);
app.use('/usuarios', usuariosRoutes);
app.use('/citas', citasRoutes);
app.use('/mensajes', mensajesRoutes);

const PORT = process.env.PORT || 3000;
app.listen(PORT, () => {
    console.log(`Server running on port ${PORT}`);
});
