@extends('layouts.app')

@section('content')
<section class="py-12 bg-[#F3FFE3] min-h-screen">
    <h2 class="text-4xl font-extrabold text-center mb-12 text-black">
        Our Service Plans
    </h2>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-7xl mx-auto px-4">
        <!-- Silver Plan -->
        <div class="bg-white rounded-2xl shadow-xl border-t-4 border-gray-400 p-6 hover:scale-105 transition">
            <h3 class="text-2xl font-bold text-black mb-4">Silver Plan</h3>
            <p class="text-black mb-4">Ideal for students who want guidance at every step but will handle execution themselves.</p>
            <ul class="list-disc pl-5 space-y-2 text-black text-base">
                <li>Step-by-step expert guidance (admission to visa)</li>
                <li>Checklists for documents, deadlines & timeline</li>
                <li>Advice on selecting the right universities</li>
                <li>Review of your CV, SOP, and documents</li>
                <li>Visa file checklist & best practices</li>
                <li>Tips & hacks to avoid common mistakes</li>
                <li><span class="line-through text-gray-400">No editing/writing of documents</span></li>
                <li><span class="line-through text-gray-400">No document attestation</span></li>
            </ul>
        </div>

        <!-- Gold Plan -->
        <div class="bg-white rounded-2xl shadow-xl border-t-4 border-yellow-400 p-6 hover:scale-105 transition">
            <h3 class="text-2xl font-bold text-black mb-4">Gold Plan</h3>
            <p class="text-black mb-4">Perfect if you want professionally written documents — ready to impress universities.</p>
            <ul class="list-disc pl-5 space-y-2 text-black text-base">
                <li>Everything included in Silver Plan</li>
                <li>Professionally updated CV / Resume</li>
                <li>Strong Recommendation Letters crafted for you</li>
                <li>Tailored Motivation / Personal Statement</li>
                <li>Extra help shortlisting universities</li>
                <li>Email templates for professor/scholarship reach-out</li>
                <li><span class="line-through text-gray-400">No document attestation</span></li>
            </ul>
        </div>

        <!-- Diamond Plan -->
        <div class="bg-white rounded-2xl shadow-xl border-t-4 border-pink-500 p-6 hover:scale-105 transition">
            <h3 class="text-2xl font-bold text-black mb-4">Diamond Plan</h3>
            <p class="text-black mb-4">VIP plan: Just submit your data — we’ll handle everything, including attestation.</p>
            <ul class="list-disc pl-5 space-y-2 text-black text-base">
                <li>Everything in Silver & Gold Plans</li>
                <li>We attest all required documents for you</li>
                <li>Complete visa file preparation</li>
                <li>Priority 1-on-1 support (WhatsApp/Call)</li>
                <li>Fastest turnaround for documents</li>
                <li>Total peace of mind — we do the heavy lifting</li>
            </ul>
        </div>
    </div>
</section>
@endsection
