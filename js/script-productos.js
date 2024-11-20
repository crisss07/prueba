function enviarWhatsApp(nombreProducto, imagenUrl) {
    console.log('llego', nombreProducto, imagenUrl)
    const numero = "59175841028"; // Número de WhatsApp en Bolivia
    const mensaje = `Hola, estoy interesado en el producto:\n\n` +
                    `*Nombre*: ${nombreProducto}\n` +
                    `*Imagen*: ${imagenUrl}\n\n` +
                    `¿Podría darme más información?`;
    const url = `https://wa.me/${numero}?text=${encodeURIComponent(mensaje)}`;

    window.open(url, "_blank");
}
