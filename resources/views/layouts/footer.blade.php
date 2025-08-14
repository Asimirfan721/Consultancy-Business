<!-- filepath: resources/views/layouts/footer.blade.php -->
<footer class="bg-[#f8fafc] border-t border-gray-200 pt-10 pb-4 mt-16">
    <div class="max-w-7xl mx-auto px-4">
        <div class="flex flex-col md:flex-row md:justify-between gap-10">
            <!-- Logo & About -->
            <div class="flex-1 min-w-[220px]">
                <div class="flex items-center gap-2 mb-2">
                    <img src="/images/Tech Consultancy.jpg" alt="Tech Consultant" class="h-10 w-auto" />
                    <div>
                        <div class="text-xl font-bold text-red-700 leading-tight">Tech CONSULTANT</div>
                        <div class="text-xs font-bold text-red-700">21 YEARS OF SHAPING CAREERS</div>
                    </div>
                </div>
                <p class="text-black text-sm mt-2 leading-relaxed">
                    Official Representatives of 1000+ Universities & Colleges Worldwide.<br>
                    As your trusted study abroad advisor!<br>
                    Tech Consultant was established in 2004 in Karachi, Pakistan.
                </p>
            </div>

            <!-- Quick Links -->
            <div class="flex-1 min-w-[180px]">
                <h3 class="font-bold text-lg text-black mb-2">Quick Links</h3>
                <ul class="space-y-1 text-black">
                    <li><a href="{{ url('/about') }}" class="hover:underline flex items-center gap-2"><span>&rsaquo;</span> About us</a></li>
                    
                    <li><a href="{{ url('/blogs') }}" class="hover:underline flex items-center gap-2"><span>&rsaquo;</span> Recent blogs</a></li>
                              </ul>
            </div>

            <!-- Recent Blogs -->
            <div class="flex-1 min-w-[220px]">
                <h3 class="font-bold text-lg text-black mb-2">Recent Blogs</h3>
                <ul class="space-y-3">
                    <li class="flex items-start gap-2">
                        <span class="text-red-600 mt-1">
                            <i class="far fa-calendar-alt"></i>
                        </span>
                        <div>
                            <div class="text-xs text-black">2025-05-19</div>
                            <a href="/blogs/study-in-italy" class="font-semibold text-black hover:underline text-sm">Study Scholarships in italy</a>
                        </div>
                    </li>
                    <li class="flex items-start gap-2">
                        <span class="text-red-600 mt-1">
                            <i class="far fa-calendar-alt"></i>
                        </span>
                        <div>
                            <div class="text-xs text-black">2025-05-19</div>
                            <a href="/blogs/study-in-germany" class="font-semibold text-black hover:underline text-sm">Study in Germany</a>
                        </div>
                    </li>
                </ul>
            </div>

            <!-- Contact Us -->
            <div class="flex-1 min-w-[180px]">
                <h3 class="font-bold text-lg text-black mb-2">Contact Us</h3>
                <ul class="space-y-3">
                    <li class="flex items-center gap-2">
                        <span class="inline-flex items-center justify-center w-8 h-8 rounded bg-white border border-gray-300 text-red-600">
                            <i class="far fa-envelope"></i>
                        </span>
                        <span class="text-black text-sm">study@Techconsultant.com</span>
                    </li>
                    <li class="flex items-center gap-2">
                        <span class="inline-flex items-center justify-center w-8 h-8 rounded bg-white border border-gray-300 text-red-600">
                            <i class="fas fa-phone"></i>
                        </span>
                        <span class="text-black text-sm">(92) 345 2066 100</span>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Accreditation Badges -->
        <div class="flex flex-wrap justify-center items-center gap-8 my-8 border-t border-gray-200 pt-6">
            <img src="/images/badge1.png" alt="World's No.1 Partner" class="h-20" />
            <img src="/images/badge2.png" alt="British Council" class="h-20" />
            <img src="/images/badge3.png" alt="USATC" class="h-20" />
            <img src="/images/badge4.png" alt="QEAC" class="h-20" />
            <img src="/images/badge5.png" alt="Trusted Agency" class="h-20" />
        </div>

        <!-- Bottom Bar -->
        <div class="flex flex-col md:flex-row justify-between items-center border-t border-gray-200 pt-4 text-sm text-black">
            <div class="mb-2 md:mb-0">
                © Tech Consultant 2025 | All Rights Reserved
            </div>
            <div class="flex gap-6">
                <a href="#" class="hover:underline">Terms & Conditions</a>
                <a href="#" class="hover:underline">Privacy Policy</a>
                <a href="{{ url('/contact') }}" class="hover:underline">Contact Us</a>
            </div>
            <div class="flex gap-2 mt-2 md:mt-0">
                <a href="https://facebook.com" target="_blank" class="bg-red-700 text-white rounded-l-full px-4 py-2 flex items-center">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://wa.me/923052135624" target="_blank" class="bg-red-700 text-white rounded-full px-4 py-2 flex items-center font-semibold">
                    <i class="fab fa-whatsapp mr-2"></i> Chat with us
                </a>
            </div>
        </div>
    </div>
    <!-- Scroll to top button -->
    <button onclick="window.scrollTo({top:0,behavior:'smooth'})"
        class="fixed bottom-8 right-8 bg-red-700 text-white rounded-lg p-3 shadow-lg hover:bg-red-800 transition z-50">
        <i class="fas fa-arrow-up"></i>
    </button>
</footer>