@extends('layouts.admin')

@section('content')
<div class="py-6">
    <div class="mb-10">
        <h1 class="text-4xl font-black text-text italic">Customer <span class="text-brand">Inquiries</span></h1>
        <p class="text-gray-500 font-medium">Read and respond to messages from the contact form.</p>
    </div>

    <div class="bg-white rounded-[2rem] shadow-sm border border-brand-100 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left">
                <thead>
                    <tr class="bg-gray-50 border-b border-gray-100">
                        <th class="p-6 text-xs font-bold text-gray-400 uppercase tracking-widest">Sender</th>
                        <th class="p-6 text-xs font-bold text-gray-400 uppercase tracking-widest">Message Snippet</th>
                        <th class="p-6 text-xs font-bold text-gray-400 uppercase tracking-widest">Received</th>
                        <th class="p-6 text-xs font-bold text-gray-400 uppercase tracking-widest text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50">
                    {{-- @foreach($messages as $msg) --}}
                    <tr class="hover:bg-brand-light/20 transition-all group">
                        <td class="p-6">
                            <div class="flex items-center gap-3">
                                <div class="w-2 h-2 rounded-full bg-brand animate-pulse"></div> {{-- Only show if unread --}}
                                <div>
                                    <p class="font-bold text-text">Priya Sharma</p>
                                    <p class="text-xs text-gray-400 italic">priya@example.com</p>
                                </div>
                            </div>
                        </td>

                        <td class="p-6 max-w-md">
                            <p class="text-sm text-gray-600 line-clamp-1">
                                "Hi, I was wondering if you offer vegan options for a wedding catering event next month..."
                            </p>
                        </td>

                        <td class="p-6 text-sm text-gray-500 whitespace-nowrap">
                            2 hours ago
                        </td>

                        <td class="p-6 text-right">
                            <div class="flex justify-end gap-2">
                                <button class="px-4 py-2 bg-text text-white text-xs font-bold rounded-xl hover:bg-black transition-colors">
                                    Read & Reply
                                </button>
                                <button class="p-2 text-gray-400 hover:text-red-600 rounded-xl transition-colors">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg>
                                </button>
                            </div>
                        </td>
                    </tr>
                    {{-- @endforeach --}}
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection