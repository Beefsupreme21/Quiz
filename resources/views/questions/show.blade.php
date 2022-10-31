<x-layout>
    <div>
        <a href="/questions/{{ $question->id }}">
            <button class="text-blue-500 hover:underline">
                {{ $question->text }}</p>
            </button>
        </a>
    </div>
    <div class="mb-2">
        <a href="/questions/{{ $question->id }}/edit">
            <button class="text-cyan-600 hover:underline pr-3">
                Edit
            </button>
        </a>
    </div>

    <form method="POST" action="/questions/{{ $question->id }}">
        @csrf
        @method('DELETE')
        <button class="text-red-500 hover:underline">
            Delete
        </button>
    </form>
</x-layout>




{{-- <div x-data="quiz">
    <template x-for="question in questions">
        <p x-text="question.question"></p>
        <template x-for="answer in question.answers">
            <button @click="addAnswer(question.id, answer.id)" x-text="answer.text"></button>
        </template>
    </template>
    <template x-if="answers.length === questions.length">
        <button @click="save">Save</button>
    </template>
</div>

<script>

Alpine.data('quiz', () => ({
    questions: {{ $category->questions }},
    answers: [],

    addAnswer(questionId, answerId) {
        this.answers.push({
            question_id: questionId,
            answer_id: answerId,
        })
    },

    save() {
        console.log(this.answers);
    }
}))

</script> --}}