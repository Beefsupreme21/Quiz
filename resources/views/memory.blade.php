<x-layout>
    <div x-data="game" class="mt-24 px-10 flex items center justify-center">
        <div class="flex-1 grid grid-cols-4 gap-10">
            <template x-for="card in cards">
                <div :style="'background: ' + (card.flipped ? card.color : '#999')"
                    class="h-32 cursor-pointer"
                    x-text="card.color"
                    x-on:click="flipCard(card)"
                >
                </div>
            </template>
        </div>

    </div>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('game', () => ({
                cards: [
                    { color: 'green', flipped: false, cleared: false},
                    { color: 'red', flipped: false, cleared: false},
                    { color: 'blue', flipped: false, cleared: false},
                    { color: 'yellow', flipped: false, cleared: false},
                    { color: 'green', flipped: false, cleared: false},
                    { color: 'red', flipped: false, cleared: false},
                    { color: 'blue', flipped: false, cleared: false},
                    { color: 'yellow', flipped: false, cleared: false},
                ],

                flipCard(card) {
                    card.flipped = !card.flipped;
                }
            }))
        })
    </script>
</x-layout>

