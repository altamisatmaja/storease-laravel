import {
    Chart, LineController, LineElement, Filler, PointElement, LinearScale, TimeScale, Tooltip,
  } from 'chart.js';
  import 'chartjs-adapter-moment';
  import { chartAreaGradient } from '../app';

  import { tailwindConfig, formatValue, hexToRGB } from '../utils';

  Chart.register(LineController, LineElement, Filler, PointElement, LinearScale, TimeScale, Tooltip);

  const dashboardCard01 = async () => {
    const ctx = document.getElementById('dashboard-card-01');
    if (!ctx) return;

    const darkMode = localStorage.getItem('dark-mode') === 'true';

    const tooltipBodyColor = {
      light: '#6B7280',
      dark: '#9CA3AF'
    };

    const tooltipBgColor = {
      light: '#ffffff',
      dark: '#ea580c'
    };

    const tooltipBorderColor = {
      light: '#E5E7EB',
      dark: '#4B5563'
    };

    const labels = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

    const fetchData = async () => {
      try {
        const response = await fetch(`${window.Laravel.apiBaseUrl}/api/chart/pemesanan-bulanan`);
        const data = await response.json();

        return {
          dataset1: data.datasets.find(dataset => dataset.label === 'Barang').data,
          dataset2: data.datasets.find(dataset => dataset.label === 'Personel').data,
        };
      } catch (error) {
        console.error('Error fetching data:', error);
        return {
          dataset1: Array(12).fill(0),
          dataset2: Array(12).fill(0),
        };
      }
    };

    const { dataset1, dataset2 } = await fetchData();

    const chart = new Chart(ctx, {
      type: 'line',
      data: {
        labels: labels,
        datasets: [

          {
            data: dataset1,
            fill: true,
            backgroundColor: function(context) {
              const chart = context.chart;
              const { ctx, chartArea } = chart;
              if (!chartArea) {

                return null;
              }
              return chartAreaGradient(ctx, chartArea, [
                { stop: 0, color: `rgba(${hexToRGB(tailwindConfig().theme.colors.orange[500])}, 0)` },
                { stop: 1, color: `rgba(${hexToRGB(tailwindConfig().theme.colors.orange[500])}, 0.2)` }
              ]);
            },
            borderColor: tailwindConfig().theme.colors.orange[500],
            borderWidth: 2,
            pointRadius: 0,
            pointHoverRadius: 3,
            pointBackgroundColor: tailwindConfig().theme.colors.orange[500],
            pointHoverBackgroundColor: tailwindConfig().theme.colors.orange[500],
            pointBorderWidth: 0,
            pointHoverBorderWidth: 0,
            clip: 20,
            tension: 0.2
          },

          {
            data: dataset2,
            borderColor: `rgba(${hexToRGB(tailwindConfig().theme.colors.gray[500])}, 0.25)`,
            borderWidth: 2,
            pointRadius: 0,
            pointHoverRadius: 3,
            pointBackgroundColor: `rgba(${hexToRGB(tailwindConfig().theme.colors.gray[500])}, 0.25)`,
            pointHoverBackgroundColor: `rgba(${hexToRGB(tailwindConfig().theme.colors.gray[500])}, 0.25)`,
            pointBorderWidth: 0,
            pointHoverBorderWidth: 0,
            clip: 20,
            tension: 0.2
          },
        ],
      },
      options: {
        layout: {
          padding: 20,
        },
        scales: {
          y: {
            display: false,
            beginAtZero: true,
          },
          x: {
            type: 'category',
            display: false,
          },
        },
        plugins: {
          tooltip: {
            callbacks: {
              title: () => false,
              label: (context) => formatValue(context.parsed.y),
            },
            bodyColor: darkMode ? tooltipBodyColor.dark : tooltipBodyColor.light,
            backgroundColor: darkMode ? tooltipBgColor.dark : tooltipBgColor.light,
            borderColor: darkMode ? tooltipBorderColor.dark : tooltipBorderColor.light,
          },
          legend: {
            display: false,
          },
        },
        interaction: {
          intersect: false,
          mode: 'nearest',
        },
        maintainAspectRatio: false,
      },
    });

    document.addEventListener('darkMode', (e) => {
      const { mode } = e.detail;
      if (mode === 'on') {
        chart.options.plugins.tooltip.bodyColor = tooltipBodyColor.dark;
        chart.options.plugins.tooltip.backgroundColor = tooltipBgColor.dark;
        chart.options.plugins.tooltip.borderColor = tooltipBorderColor.dark;
      } else {
        chart.options.plugins.tooltip.bodyColor = tooltipBodyColor.light;
        chart.options.plugins.tooltip.backgroundColor = tooltipBgColor.light;
        chart.options.plugins.tooltip.borderColor = tooltipBorderColor.light;
      }
      chart.update('none');
    });
  };

  export default dashboardCard01;
