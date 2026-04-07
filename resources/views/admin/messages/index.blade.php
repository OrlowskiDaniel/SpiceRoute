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
                    @foreach($messages as $msg)
                        <tr class="hover:bg-brand-light/20 transition-all group">
                            <td class="p-6">
                                <div class="flex items-center gap-3">
                                    {{-- Status Indicator --}}
                                    @if(!$msg->is_replied)
                                        <div class="w-2 h-2 rounded-full bg-brand animate-pulse" title="New Message"></div>
                                    @else
                                        <div class="w-2 h-2 rounded-full bg-gray-300" title="Replied"></div>
                                    @endif
                                    
                                    <div>
                                        <p class="font-bold text-text">{{ $msg->name }}</p>
                                        <p class="text-xs text-gray-400 italic">{{ $msg->email }}</p>
                                    </div>
                                </div>
                            </td>

                            <td class="p-6">
                                <div class="flex items-center gap-2">
                                    <p class="text-sm text-gray-600 line-clamp-1">{{ $msg->message }}</p>
                                    @if($msg->is_replied)
                                        <span class="text-[10px] bg-green-100 text-green-700 px-2 py-0.5 rounded-full font-bold uppercase">Replied</span>
                                    @endif
                                </div>
                            </td>

                            <td class="p-6 text-sm text-gray-500">{{ $msg->created_at->diffForHumans() }}</td>

                            <td class="p-6 text-right">
                                <div class="flex justify-end gap-2">
                                    <button onclick="toggleModal('modal-{{ $msg->id }}')" class="px-4 py-2 bg-text text-white text-xs font-bold rounded-xl hover:bg-black transition-colors">
                                        Read & Reply
                                    </button>
                                    
                                    <form action="/messages/{{ $msg->id }}" method="POST">
                                        @csrf @method('DELETE')
                                        <button type="submit" onclick="return confirm('Delete this message?')" class="p-2 text-gray-400 hover:text-red-600">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" /></svg>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>

                        <div id="modal-{{ $msg->id }}" class="fixed inset-0 z-50 hidden overflow-y-auto" aria-labelledby="modal-title" role="dialog" aria-modal="true">
                            <div class="flex items-center justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
                                <div class="fixed inset-0 transition-opacity bg-gray-500 bg-opacity-75" onclick="toggleModal('modal-{{ $msg->id }}')"></div>
                                <div class="inline-block overflow-hidden text-left align-bottom transition-all transform bg-white rounded-[2rem] shadow-xl sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                                    <div class="p-8 bg-white">
                                        <h3 class="text-2xl font-black text-text mb-2">Message from <span class="text-brand">{{ $msg->name }}</span></h3>
                                        <div class="bg-gray-50 p-4 rounded-2xl mb-6 text-gray-600 text-sm border border-gray-100">
                                            {{ $msg->message }}
                                        </div>

                                        <form action="/messages/{{ $msg->id }}/reply" method="POST">
                                            @csrf
                                            <label class="block text-xs font-bold text-gray-400 uppercase tracking-widest mb-2">Your Reply</label>
                                            <textarea name="reply_content" rows="4" class="w-full p-4 border border-brand-100 rounded-2xl focus:ring-brand focus:border-brand mb-4" placeholder="Write your response here..." required></textarea>
                                            
                                            <div class="flex justify-end gap-3">
                                                <button type="button" onclick="toggleModal('modal-{{ $msg->id }}')" class="px-5 py-2 text-sm font-bold text-gray-500">Cancel</button>
                                                <button type="submit" class="px-6 py-2 bg-brand text-white text-sm font-bold rounded-xl shadow-lg shadow-brand/20">Send Reply</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <script>
                        function toggleModal(id) {
                            const modal = document.getElementById(id);
                            modal.classList.toggle('hidden');
                        }
                    </script>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection