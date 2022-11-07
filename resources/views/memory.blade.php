<x-layout>
    <div x-data="game" class="mt-24 px-10">
        <h1 class="text-center p-10 font-bold text-3xl">
            <span x-text="points"></span>
            <span class="text-xs">pts</span>
        </h1>
        <div class="flex-1 grid grid-cols-4 gap-10">
            <template x-for="card in cards">
                <div>
                    <button 
                        x-show="!card.cleared"
                        :style="'background: ' + (card.flipped ? card.color : '#999')"
                        class="h-32 w-full"
                        x-on:click="flipCard(card)"
                    >
                    </button>
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

                get flippedCards() {
                    return this.cards.filter(card => card.flipped);
                },

                get clearedCards() {
                    return this.cards.filter(card => card.cleared);
                },

                get remainingCards() {
                    return this.cards.filter(card => !card.cleared);
                },

                get points() {
                    return this.clearedCards.length;
                },

                flipCard(card) {
                    card.flipped = !card.flipped;

                    if (this.flippedCards.length === 2) {
                        if (this.hasMatch()) {
                            setTimeout(() => {
                                this.flippedCards.forEach(card => card.cleared = true);
                            }, 1000);

                            if(! this.remainingCards.length) {
                                alert('You Won!');
                            }
                        }

                        setTimeout(() => {
                            this.flippedCards.forEach(card => card.flipped = false);
                        }, 1000);
                        
                    }
                }, 

                hasMatch() {
                    return this.flippedCards[0]['color'] === this.flippedCards[1]['color'];
                }
            }))
        })
    </script>
</x-layout>

