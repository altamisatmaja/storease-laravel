// Import Chart.js
import {
    Chart,
    LineController,
    LineElement,
    Filler,
    PointElement,
    LinearScale,
    TimeScale,
    Tooltip,
} from "chart.js";
import "chartjs-adapter-moment";
import { chartAreaGradient } from "../app";

// Import utilities
import { tailwindConfig, formatValue, hexToRGB } from "../utils";

Chart.register(
    LineController,
    LineElement,
    Filler,
    PointElement,
    LinearScale,
    TimeScale,
    Tooltip
);

// A chart built with Chart.js 3
// https://www.chartjs.org/
const dashboardCard02 = () => {
    const ctx = document.getElementById("dashboard-card-02");
    if (!ctx) return;

    const darkMode = localStorage.getItem("dark-mode") === "false";

    const tooltipBodyColor = {
        light: "#6B7280",
        dark: "#9CA3AF",
    };

    const tooltipBgColor = {
        light: "#ffffff",
        dark: "#374151",
    };

    const tooltipBorderColor = {
        light: "#E5E7EB",
        dark: "#4B5563",
    };

    // Static data
    const result = {
        labels: [
            "01-01-2021",
            "02-01-2021",
            "03-01-2021",
            "04-01-2021",
            "05-01-2021",
            "06-01-2021",
            "07-01-2021",
            "08-01-2021",
            "09-01-2021",
            "10-01-2021",
            "11-01-2021",
            "12-01-2021",
        ],
        data: [
            65, 59, 80, 81, 56, 55, 40, 45, 60, 70, 78, 85, 45, 55, 60, 62, 70,
            75, 68, 50, 48, 72, 75, 80, 55, 60, 68, 70, 75, 80, 85, 90, 92, 95,
            100, 105, 110, 115, 120, 125, 130, 135, 140, 145, 150, 155, 160,
            165, 170, 175, 180, 185,
        ],
    };

    const dataset1 = result.data.slice(0, 26);
    const dataset2 = result.data.slice(26, 52);

    const chart = new Chart(ctx, {
        type: "line",
        data: {
            labels: result.labels,
            datasets: [
                // Indigo line
                {
                    data: dataset1,
                    fill: true,
                    backgroundColor: function (context) {
                        const chart = context.chart;
                        const { ctx, chartArea } = chart;
                        return chartAreaGradient(ctx, chartArea, [
                            {
                                stop: 0,
                                color: `rgba(${hexToRGB(
                                    tailwindConfig().theme.colors.orange[500]
                                )}, 0)`,
                            },
                            {
                                stop: 1,
                                color: `rgba(${hexToRGB(
                                    tailwindConfig().theme.colors.orange[500]
                                )}, 0.2)`,
                            },
                        ]);
                    },
                    borderColor: tailwindConfig().theme.colors.orange[500],
                    borderWidth: 2,
                    pointRadius: 0,
                    pointHoverRadius: 3,
                    pointBackgroundColor:
                        tailwindConfig().theme.colors.orange[500],
                    pointHoverBackgroundColor:
                        tailwindConfig().theme.colors.orange[500],
                    pointBorderWidth: 0,
                    pointHoverBorderWidth: 0,
                    clip: 20,
                    tension: 0.2,
                },
                // Gray line
                {
                    data: dataset2,
                    borderColor: `rgba(${hexToRGB(
                        tailwindConfig().theme.colors.gray[500]
                    )}, 0.25)`,
                    borderWidth: 2,
                    pointRadius: 0,
                    pointHoverRadius: 3,
                    pointBackgroundColor: `rgba(${hexToRGB(
                        tailwindConfig().theme.colors.gray[500]
                    )}, 0.25)`,
                    pointHoverBackgroundColor: `rgba(${hexToRGB(
                        tailwindConfig().theme.colors.gray[500]
                    )}, 0.25)`,
                    pointBorderWidth: 0,
                    pointHoverBorderWidth: 0,
                    clip: 20,
                    tension: 0.2,
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
                    type: "time",
                    time: {
                        parser: "MM-DD-YYYY",
                        unit: "month",
                    },
                    display: false,
                },
            },
            plugins: {
                tooltip: {
                    callbacks: {
                        title: () => false, // Disable tooltip title
                        label: (context) => formatValue(context.parsed.y),
                    },
                    bodyColor: darkMode
                        ? tooltipBodyColor.dark
                        : tooltipBodyColor.light,
                    backgroundColor: darkMode
                        ? tooltipBgColor.dark
                        : tooltipBgColor.light,
                    borderColor: darkMode
                        ? tooltipBorderColor.dark
                        : tooltipBorderColor.light,
                },
                legend: {
                    display: false,
                },
            },
            interaction: {
                intersect: false,
                mode: "nearest",
            },
            maintainAspectRatio: false,
        },
    });

    document.addEventListener("darkMode", (e) => {
        const { mode } = e.detail;
        if (mode === "on") {
            chart.options.plugins.tooltip.bodyColor = tooltipBodyColor.dark;
            chart.options.plugins.tooltip.backgroundColor = tooltipBgColor.dark;
            chart.options.plugins.tooltip.borderColor = tooltipBorderColor.dark;
        } else {
            chart.options.plugins.tooltip.bodyColor = tooltipBodyColor.light;
            chart.options.plugins.tooltip.backgroundColor =
                tooltipBgColor.light;
            chart.options.plugins.tooltip.borderColor =
                tooltipBorderColor.light;
        }
        chart.update("none");
    });
};

export default dashboardCard02;
