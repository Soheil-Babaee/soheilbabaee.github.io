function downloadFile() {
    // ایجاد یک عنصر a موقت
    const link = document.createElement('a');
    link.href = ''; // آدرس فایل برای دانلود
    link.download = 'فایل رزومه'; // نام فایلی که دانلود می‌شود

    // افزودن لینک به سند و کلیک بر روی آن
    document.body.appendChild(link);
    link.click();

    // حذف لینک پس از دانلود
    document.body.removeChild(link);
}
// menu bar

$(document).ready(function() {
    const texts = [
       "توسعه دهنده وبسایت",
       "برنامه نویس نرم افزار",
       "طراح وبسایت",
       "Developer's Website",
       "Software programmer",
       "Web designer"


    ];

    let currentIndex = 0;
    const textContainer = $(".h5");

    function changeTextWithAnimation() {
        textContainer.fadeOut(500, function() {
            $(this).text(texts[currentIndex]).fadeIn(500);
        });
        currentIndex = (currentIndex + 1) % texts.length;
    }

    setInterval(changeTextWithAnimation, 2600); // تغییر هر 3 ثانیه با انیمیشن
});