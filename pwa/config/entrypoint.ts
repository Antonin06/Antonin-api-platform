export const ENTRYPOINT = typeof window === "undefined" ? (process.env.NEXT_PUBLIC_ENTRYPOINT || "https://cda2-devops-antonin.simplon-roanne.com") : window.origin;
