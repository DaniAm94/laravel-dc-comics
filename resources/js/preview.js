
const placeholder =
    'https://media.istockphoto.com/id/1147544807/vector/thumbnail-image-vector-graphic.jpg?s=612x612&w=0&k=20&c=rnCKVbdxqkjlcs3xH87-9gocETqpspHFXu5dIGB4wuM=';
const inputThumb = document.getElementById('input-thumb');
const preview = document.getElementById('preview');
inputThumb.addEventListener('input', () => {
    const url = inputThumb.value;
    preview.src = url || placeholder;


})
