 'use strict';

    function spark(pos, config) {
        this.config = config || { size: 1, angle: 1, range: 1 };

        this.init = function(pos) {
            this.position = { x: pos.x + (Math.random() * 60 - 30) * this.config.range, y: pos.y + (Math.random() * 10 - 5) };
            this.velocity = { angle: (Math.random() - 0.5) * Math.PI * this.config.angle + Math.PI * 1.5, weight: Math.random() * 15 + 5 };
            this.gravity = { angle: (Math.random() - 0.5) * 0.25 + Math.PI * 1.5, chance: (Math.random() - 0.5) * 0.25, weight: Math.random() * 2 + 3 };
            this.prevPosition = this.position;
            this.lifespan = Math.random() * 40 + 60;
            this.alpha = Math.random() * 30 + 30;
            this.next = Math.random() * 1000;
        }

        this.update = function(pos) {
            if (--this.next > 0) {
                return;
            }
            this.prevPosition = { x: this.position.x, y: this.position.y };
            this.position.x += Math.cos(this.velocity.angle) * this.velocity.weight + Math.cos(this.gravity.angle) * this.gravity.weight;
            this.position.y += Math.sin(this.velocity.angle) * this.velocity.weight + Math.sin(this.gravity.angle) * this.gravity.weight;
            //
            this.velocity.weight *= 0.96;
            this.velocity.angle += this.gravity.chance;
            --this.lifespan <= 0 ? this.init(pos) : null;
        }

        this.render = function(ctx) {
            ctx.strokeStyle = colors[Math.round(Math.random() * (colors.length - 1))];
            ctx.lineWidth = this.velocity.weight * 0.12 * this.config.size;
            ctx.globalAlpha = this.lifespan / this.alpha;
            ctx.beginPath();
            ctx.moveTo(this.position.x, this.position.y);
            ctx.lineTo(this.prevPosition.x, this.prevPosition.y);
            ctx.closePath();
            ctx.stroke();
            ctx.lineWidth = 1;
            ctx.globalAlpha = 1;
        }

        //
        this.init(pos);
    }

    let main = {
        canvas: document.getElementById('canvas'),
        buffer: document.getElementById('buffer'),
        ctx: null,
        eff: null,
        width: window.innerWidth,
        height: window.innerHeight,
        fire: [],
        sparks: [],
        total: 50,
        position: { x: window.innerWidth * 0.73, y: window.innerHeight },
        init: function() {
            this.registerEvents();
            this.ctx = this.canvas.getContext('2d');
            this.ctx.globalCompositeOperation = 'screen';
            this.eff = this.buffer.getContext('2d');
            this.eff.globalCompositeOperation = 'screen';
            [...Array(this.total * 2.5).keys()].forEach(i => {
                this.fire.push(new spark(this.position, { size: 2.5, angle: 0.5, range: 2.5 }));
            });
            [...Array(this.total).keys()].forEach(i => {
                this.sparks.push(new spark(this.position));
            });
            //
            this.resize();
        },
        update: function() {
            let position = this.position;
            this.fire.forEach(s => s.update(position));
            this.sparks.forEach(s => s.update(position));
        },
        render: function() {
            let ctx = this.ctx;
            let eff = this.eff;
            ctx.clearRect(0, 0, this.width, this.height);

            eff.clearRect(0, 0, this.width, this.height);
            this.fire.forEach(s => { s.render(ctx); });
            this.sparks.forEach(s => { s.render(eff); });
        },
        resize: function() {
            this.width = window.innerWidth;
            this.height = window.innerHeight;
            this.canvas.width = this.width;
            this.canvas.height = this.height;
            this.buffer.width = this.width;
            this.buffer.height = this.height;
            this.position.y = this.height;
        },
        registerEvents: function() {
            window.addEventListener('resize', () => {
                this.resize();
            }, false);
        }
    };
    let colors = ['#fd9', '#fe9', '#fa9', '#e99', '#ea9', '#f66'];

    main.init();
    (function loop() {
        main.update();
        main.render();
        window.requestAnimationFrame(loop);
    })();