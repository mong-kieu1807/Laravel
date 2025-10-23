
// Load header and footer fragments and basic interactivity
document.addEventListener('DOMContentLoaded',()=>{
// Simple client-side include (fetch local fragments)
const loadFragment = async (selector, path)=>{
try{
const res = await fetch(path);
if(!res.ok) throw new Error('Không tìm thấy: '+path);
const html = await res.text();
document.querySelector(selector).innerHTML = html;
}catch(e){
console.warn(e);
// fallback inline content
if(selector==='#site-header') document.querySelector(selector).innerHTML = `<nav class="nav"><div class="nav-inner container"><a class="brand" href="#">TinTucSimple</a></div></nav>`;
if(selector==='#site-footer') document.querySelector(selector).innerHTML = `<div class="footer-inner container"><p>© <span id="year"></span> TinTucSimple</p></div>`;
}
}


loadFragment('#site-header','header.html');
loadFragment('#site-footer','footer.html');


// After header loaded, wire menu toggle
document.body.addEventListener('click', (e)=>{
const toggle = document.getElementById('menu-toggle');
const navLinks = document.getElementById('nav-links');
if(toggle && navLinks){
if(e.target===toggle) navLinks.classList.toggle('show');
}
});


// Year in footer
const y = new Date().getFullYear();
const yearSpan = document.getElementById('year');
if(yearSpan) yearSpan.textContent = y;


// Inject a few demo articles (could be replaced with API fetch)
const articles = document.getElementById('articles');
if(articles){
for(let i=1;i<=6;i++){
const a = document.createElement('article');
a.className='card';
a.innerHTML = `
<img src="https://via.placeholder.com/400x200?text=Tin+${i}" alt="Tin ${i}">
<h2>Tiêu đề bài viết #${i}</h2>
<p class="meta">${i} Tháng 9, 2025 • Biên tập viên</p>
<p class="excerpt">Đoạn tóm tắt ngắn cho bài viết số ${i}. Nội dung demo để kiểm tra layout.</p>
<a class="read-more" href="#">Đọc tiếp →</a>
`;
articles.appendChild(a);
}
}
});