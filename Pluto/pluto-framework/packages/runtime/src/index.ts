                // src/pluto.ts (RUNTIME ENGINE LENGKAP)

                // --- 1. REACTIVITY SYSTEM (Jantung Framework) ---
                let activeContext: Function | null = null;

                export function createSignal<T>(initialValue: T) {
                    let value = initialValue;
                    const subscribers = new Set<Function>();

                    const read = () => {
                        if (activeContext) subscribers.add(activeContext);
                        return value;
                    };

                    const write = (newValue: T) => {
                        value = newValue;
                        subscribers.forEach((fn) => fn());
                    };

                    return [read, write] as const;
                }

                export function createEffect(fn: Function) {
                    const execute = () => {
                        activeContext = execute;
                        fn();
                        activeContext = null;
                    };
                    execute();
                }

                // --- 2. DOM SYSTEM (Render Helper) ---
                export function element(tagName: string, children: any[] = []) {
                    const el = document.createElement(tagName);

                    children.forEach(child => {
                        // SAFETY CHECK: Kalau ada nilai kosong, langsung diskip
                        if (child === null || child === undefined || child === false) return; 

                        if (typeof child === 'function') {
                            const textNode = document.createTextNode('');
                            createEffect(() => {
                                textNode.textContent = String(child());
                            });
                            el.appendChild(textNode);
                        } else {
                            el.append(child);
                        }
                    });

                    return el;
                }

                export function mount(component: HTMLElement, target: HTMLElement) {
                    target.innerHTML = ''; 
                    target.appendChild(component);
                }