import { Controller } from '@hotwired/stimulus';
import JSConfetti from 'js-confetti';

/* stimulusFetch: 'lazy' */
export default class extends Controller {
    connect() {
        const jsConfetti = new JSConfetti();
        jsConfetti.addConfetti();
    }
}
