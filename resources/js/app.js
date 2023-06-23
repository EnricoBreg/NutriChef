import './bootstrap';
import Alpine from 'alpinejs';
import Swal from 'sweetalert2';
import { Chart } from 'chart.js';

window.Alpine = Alpine; // Alpine.js
window.Swal = Swal; // SweetAlert2
window.Chart = Chart; // Chart.js 

Alpine.start();
