<?php
declare (strict_types = 1);

namespace app\middleware;

class Check
{
    /**
     * 按教程写的
     * 处理请求 参考：https://www.kancloud.cn/manual/thinkphp6_0/1037493
     *
     * @param \think\Request $request
     * @param \Closure       $next
     * @return Response
     */
    public function handle($request, \Closure $next)
    {
        if ($request->param('name') == 'think') {
            return redirect('index/think');
        }

        return $next($request);
    }
}
